@extends('app')

@section('content')
<div class="row align-items-center vh-100">
    <div class="col-md-6 text-center text-md-start">
        <h6 class="text-uppercase fw-bold text-secondary mb-3" style="letter-spacing: 3px;">Multimedia Specialist</h6>
        <h1 class="display-3 fw-bold mb-4" style="color: #4a148c; line-height: 1.2;">
            Creative <span style="background: linear-gradient(45deg, #e91e63, #9c27b0); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Vision</span><br>
            for Digital Era.
        </h1>
        <p class="lead mb-5 text-muted">Hai, saya Diska. Saya membantu brand menciptakan identitas visual yang kuat melalui desain grafis, UI/UX, dan konten multimedia yang interaktif.</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
            <a href="/portofolio" class="btn btn-lg px-5 shadow-lg" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 30px; font-weight: 600; border: none;">Eksplor Karya</a>
            <a href="#about" class="btn btn-outline-dark btn-lg px-5" style="border-radius: 30px; font-weight: 600;">Tentang Saya</a>
        </div>
    </div>
    
    <div class="col-md-6 mt-5 mt-md-0">
        <div id="3d-container" style="width: 100%; height: 550px; border-radius: 40px; background: rgba(255, 255, 255, 0.3); backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.5); box-shadow: 0 30px 60px rgba(0,0,0,0.05);"></div>
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

    const light = new THREE.DirectionalLight(0xffffff, 1.5);
    light.position.set(5, 10, 7);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0xffffff, 0.8));

    const loader = new THREE.GLTFLoader();
    loader.load('/3d/karakter.glb', function (gltf) {
        const model = gltf.scene;
        scene.add(model);
        model.position.y = -1.2;
        model.scale.set(2.2, 2.2, 2.2);
    });

    camera.position.z = 5;
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.enableZoom = false;

    function animate() {
        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    });
</script>
@endpush
@endsection