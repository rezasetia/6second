<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="./output.css" rel="stylesheet">
</head>


<body class="bg-white">
    <div class="w-screen h-screen *:">

        <div class="absolute top-1/2   mt-15  transform -translate-y-1/2 left-0 mx-auto  z-50 ">
            <p class=" text-blue text-7xl w-full py-6  px-20">6second Application Rezaaaa</p>
            <p class=" text-5xl font-semibold w-full py-4  px-20 ">the best deal price</p>
            <p class=" text-xl font-semibold w-full   px-20 ">Explore a wide selection of shoes from various brands and style </p>
            <p class=" text-xl font-semibold w-full   px-20 ">from casual shoes to sports shoes</p>

            <div class="text-xl w-full px-20 py-14">
                <a href="login.php">
                    <input type="submit" value="explore your secondhand" class="w-2/4 px-10 py-5 font-ibm bg-customBlue text-white text-xl rounded-md hover:bg-customHoverBlue cursor-pointer">
                </a>
            </div>
        </div>
        <!-- kolom1 -->
        <div class="w-full h-full relative  mx-auto">
            <!-- lingkaranbiru -->
            <img src="./assets/img/onboarding/Ellipse 2.png" alt="" class=" absolute top-0 right-0 w-full h-full">

            <div class="flex flex-col justify-center items-center h-screen relative left-1/4">
                <!-- gambar lingkaran penuh -->
                <div class="image-wrapper relative" style="top: 11rem; z-index: 0;">
                    <img src="./assets/img/onboarding/rotate.png" alt="" class="rounded mb-4" width="800" />
                </div>

                <div class="button flex gap-80 justify-between absolute bottom-60 left-1/2 transform -translate-x-1/2 z-10">
                    <button class="prev-btn px-4 py-2 ">
                        <img src="./assets/img/onboarding/Group 3.png" alt="Left Arrow" class="mr-2" width="40" />
                    </button>
                    <button class="next-btn px-4 py-2 ">
                        <img src="./assets/img/onboarding/Group 3.png" alt="Left Arrow" class="mr-2" width="40" />
                    </button>
                </div>
                <!-- gambar tengah bulat -->
                <div class="image-wrapper absolute" style="z-index: 100; top: 29rem;">
                    <img id="selector-image" src="./assets/img/onboarding/5.png" alt="" class="rounded mb-4" width="200" style="z-index: 0;" />
                </div>
            </div>
            <!-- bg-putih-setengah -->
            <img src="./assets/img/onboarding/Subtract (1).png" alt="" class="  absolute top-0  left-0 w-full h-full" style="z-index: 0;" >
        </div>
    </div>
    </div>
</body>

</html>

<script>
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const img = document.querySelector(".image-wrapper img");

    let currentRotation = 0;

    prevBtn.addEventListener("click", () => {
        currentRotation -= 45;
        img.style.transform = `rotate(${currentRotation}deg)`;
    });

    nextBtn.addEventListener("click", () => {
        currentRotation += 45;
        img.style.transform = `rotate(${currentRotation}deg)`;
    });

    // Daftar gambar yang ada di database
    const images = [
        "./asset/5.png",
        "./asset/1.png",
        "./asset/2.png",
        "./asset/4.png",






        // tambahkan path gambar lainnya sesuai dengan kebutuhan
    ];

    // Inisialisasi indeks awal
    let currentIndex = 0;

    // Fungsi untuk menampilkan gambar selanjutnya
    function showNextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    }

    // Fungsi untuk menampilkan gambar sebelumnya
    function showPreviousImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    }

    // Fungsi untuk memperbarui gambar dengan indeks yang saat ini dipilih  
    function updateImage() {
        const image = document.getElementById("selector-image");
        image.src = images[currentIndex];
    }

    // Event listener untuk tombol kanan
    nextBtn.addEventListener("click", showNextImage);

    // Event listener untuk tombol kiri
    prevBtn.addEventListener("click", showPreviousImage);
</script>
