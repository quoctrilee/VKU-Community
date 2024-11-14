document.addEventListener('DOMContentLoaded', function () {
    console.log('Loaded');
    const likeForms = document.querySelectorAll('.like-form');

    likeForms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            console.log('Prevented');

            const postId = form.querySelector('input[name="post_id"]').value;
            const likeButton = form.querySelector('button');
            const likeCountSpan = document.getElementById(`like-count-${postId}`);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    post_id: postId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.liked) {
                    likeButton.querySelector('svg').setAttribute('fill', 'red');
                } else {
                    likeButton.querySelector('svg').setAttribute('fill', 'none');
                }
                likeCountSpan.textContent = data.liked_count;
            })
            .catch(error => console.error('Error:', error));
        });
    });
});