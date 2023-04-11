pada saat awal menjalankan:
npm install
npm run build
npm install aos --save
npm i bootstrap-icons
npm i cloudinary

yang perlu ditulis di tiap page:

{{-- bootstrap css --}}
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="node_modules/aos/dist/aos.css">

{{-- bootstrap js --}}
<script src="node_modules/aos/dist/aos.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

{{-- script for animate on scroll --}}
<script>
    AOS.init();
</script>
