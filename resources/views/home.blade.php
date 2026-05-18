@extends('app')

@section('content')
<div class="row align-items-center vh-100">
    <div class="col-md-6 text-center text-md-start">
        <div class="d-inline-block px-3 py-1 mb-4" style="background: rgba(156, 39, 176, 0.1); border-radius: 50px; border: 1px solid rgba(156, 39, 176, 0.2);">
            <span class="text-uppercase fw-bold" style="letter-spacing: 2px; font-size: 0.75rem; color: #9c27b0;">Multimedia Specialist</span>
        </div>

        <h1 class="display-3 fw-800 mb-4" style="color: #2d3436; line-height: 1.1; font-weight: 800;">
            Elevating <br>
            <span style="background: linear-gradient(45deg, #e91e63, #9c27b0); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Digital Experience</span>
        </h1>
        
        <p class="lead mb-5 text-muted" style="font-weight: 400; max-width: 90%; line-height: 1.8;">
            Saya <span class="fw-bold" style="color: #4a148c;">Diska Ayu</span>, seorang desainer multimedia yang berfokus pada penggabungan estetika visual dan fungsionalitas teknologi untuk menciptakan solusi digital yang berdampak.
        </p>
        
        <div class="d-flex justify-content-center justify-content-md-start gap-4">
            <a href="/portofolio" class="btn btn-lg px-5 shadow-sm" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 12px; font-weight: 600; border: none; transition: all 0.3s ease;">
                Explore Works
            </a>
            <a href="#about" class="btn btn-lg px-5" style="border-radius: 12px; font-weight: 600; color: #4a148c; border: 1.5px solid rgba(74, 20, 140, 0.2); transition: all 0.3s ease;">
                About Me
            </a>
        </div>
    </div>
    
    <div class="col-md-6 mt-5 mt-md-0">
        <div class="position-relative">
            <div id="3d-container" style="width: 100%; height: 550px; border-radius: 30px; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.6); box-shadow: 0 40px 80px rgba(0,0,0,0.03);"></div>
            <div class="position-absolute top-0 end-0 m-4 p-3" style="background: white; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); animation: float 3s infinite ease-in-out;">
                <span style="font-size: 0.8rem; font-weight: 700; color: #e91e63;">✨ Interactive 3D</span>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-800 { font-weight: 800; }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(233, 30, 99, 0.2);
    }
</style>

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

    const light = new THREE.DirectionalLight(0xffffff, 2);
    light.position.set(5, 10, 7);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0xffffff, 1));

    const loader = new THREE.GLTFLoader();
    loader.load('/3d/karakter.glb', function (gltf) {
        const model = gltf.scene;
        scene.add(model);
        model.position.y = -1.5;
        model.scale.set(2.5, 2.5, 2.5);
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