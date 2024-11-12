let isLoading = false;

window.addEventListener('scroll', function() {
    console.log('Scroll event triggered'); // Log để kiểm tra sự kiện cuộn
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight && !isLoading) {
        console.log('Reached bottom of the page'); // Log để kiểm tra điều kiện cuộn
        isLoading = true;
        refreshPage();
    }
});

function refreshPage() {
    console.log('Refreshing page'); // Log để kiểm tra hàm refreshPage
    location.reload(); // Tải lại hoàn toàn trang
}