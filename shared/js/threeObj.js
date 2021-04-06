// threeObj.js
let scene, camera, renderer, cloudParticles = [], flash;

const drawThreejs = () => {
    const $canvas = document.querySelector('.l-bgThreejs'),
        width = window.innerWidth,
        height = window.innerHeight;

    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(60, width / height, 1, 2000);
    camera.position.z = 1;
    camera.rotation.x = 1.16;
    camera.rotation.y = -0.12;
    camera.rotation.z = 0.27;

    let ambient = new THREE.AmbientLight(0x555555);
    scene.add(ambient);

    let directionLight = new THREE.DirectionalLight(0xffeedd);
    directionLight.position.set([0, 0, 1]);
    scene.add(directionLight);

    flash = new THREE.PointLight(0x062d89, 30, 500, 1.7);
    flash.position.set([200, 300, 100]);
    scene.add(flash);

    // renderer = new THREE.WebGLRenderer();
    renderer = new THREE.WebGLRenderer();
    scene.fog = new THREE.FogExp2(0x11111f, 0.002);
    renderer.setClearColor(scene.fog.color);
    $canvas.appendChild(renderer.domElement);

    renderer.setSize(width, height);

    let loader = new THREE.TextureLoader();
    loader.load('./img/smoke-1.png', (texture) => {
        let cloudGeo = new THREE.PlaneBufferGeometry(500, 500);
        let cloudMaterial = new THREE.MeshLambertMaterial({
            map: texture,
            transparent: true
        });

        for (let p = 0; p < 25; p++) {
            let cloud = new THREE.Mesh(cloudGeo, cloudMaterial);
            cloud.position.set(
                Math.random() * 800 - 400,
                500,
                Math.random() * 500 - 450
            );
            cloud.rotation.x = 1.16;
            cloud.rotation.y = -0.12;
            cloud.rotation.z = Math.random() * 360;
            cloud.material.opacity = 0.6;
            cloudParticles.push(cloud);
            scene.add(cloud);
        }
        animate();
    });

    onResize();
    window.addEventListener('resize', onResize);
}

const animate = () => {
    cloudParticles.forEach(p => {
        p.rotation.z = -0.002;
    });

    if (Math.random() > 0.93 || flash.power > 100) {
        if (flash.power > 100) {
            flash.position.set(
                Math.random() * 400,
                300 + Math.random() * 200,
                100
            );
        }
        flash.power = 50 + Math.random() * 500;
    }
    renderer.render(scene, camera);
    requestAnimationFrame(animate);
}

// 自動リサイズ
const onResize = () => {
    const width = window.innerWidth;
    const height = window.innerHeight;

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(width, height);

    camera.aspect = width / height;
    camera.updateProjectionMatrix();
}

export default {
    drawThreejs
}