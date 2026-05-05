@extends('app')

@section('content')
<div class="row align-items-center vh-100">
    <div class="col-md-6 text-center text-md-start">
        <h1 class="display-4 fw-bold text-primary">Hai, Saya Diska!</h1>
        <p class="lead">Creative Multimedia & Graphic Designer.</p>
        <p>Berfokus pada pengembangan visual kreatif, dari desain interaktif hingga manajemen konten digital.</p>
        <a href="/portofolio" class="btn btn-warning btn-lg">Lihat Karya Saya</a>
    </div>
    
    <!-- Canvas untuk Three.js -->
    <div class="col-md-6">
        <div id="3d-container" style="width: 100%; height: 500px; background: #f8f9fa; border-radius: 20px;"></div>
    </div>
</div>
@endsection

@stack('scripts')
<!-- Kodingan Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
<script>
    const container = document.getElementById('3d-container');
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true });
    
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    // Pencahayaan
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(2, 2, 5);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0xffffff, 0.5));

    // Load Karakter 3D Kamu
    const loader = new THREE.GLTFLoader();
    loader.load('/3d/karakter.glb', function (gltf) {
        scene.add(gltf.scene);
        gltf.scene.scale.set(1.5, 1.5, 1.5);
    }, undefined, function (error) {
        console.error('Error loading 3D model:', error);
    });

    camera.position.z = 5;

    // Supaya bisa di-rotate oleh user
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableZoom = false;

    function animate() {
        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();
</script>
@endsection