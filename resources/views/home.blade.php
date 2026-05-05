@extends('app')

@section('content')
<div class="row align-items-center vh-100">
    <div class="col-md-6 text-center text-md-start">
        <h6 class="text-uppercase fw-bold text-secondary mb-3" style="letter-spacing: 2px;">Welcome to my World</h6>
        <h1 class="display-3 fw-bold mb-4" style="color: #4a148c;">Hai, Saya <span style="color: #e91e63;">Diska!</span></h1>
        <p class="lead mb-4 text-muted">Creative Multimedia & Graphic Designer yang fokus pada estetika visual dan pengalaman digital interaktif.</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
            <a href="/portofolio" class="btn btn-lg px-4 shadow-sm" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 15px;">Lihat Portfolio</a>
            <a href="#contact" class="btn btn-outline-secondary btn-lg px-4" style="border-radius: 15px;">Hubungi Saya</a>
        </div>
    </div>
    
    <!-- Area 3D Character -->
    <div class="col-md-6 mt-5 mt-md-0">
        <div id="3d-container" style="width: 100%; height: 500px; border-radius: 30px; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.6); box-shadow: 0 20px 40px rgba(0,0,0,0.05);"></div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
<script>
    const container = document.getElementById('3d-container');
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    const light = new THREE.DirectionalLight(0xffffff, 1.2);
    light.position.set(5, 5, 5);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0xffffff, 0.7));

    const loader = new THREE.GLTFLoader();
    loader.load('/3d/karakter.glb', function (gltf) {
        const model = gltf.scene;
        scene.add(model);
        model.position.y = -1;
        model.scale.set(2, 2, 2);
    });

    camera.position.z = 4;
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;

    function animate() {
        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();
</script>
@endpush
@endsection