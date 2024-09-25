<link rel="stylesheet" href="{{ asset('css/scroll-to-top.css') }}">

<div id="scroll-to-top" class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<script>
window.addEventListener('load', function() {
    console.log('Window load event fired');
    var scrollButton = document.getElementById('scroll-to-top');
    var progressPath = scrollButton.querySelector('path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

    console.log('scrollButton:', scrollButton);

    if (scrollButton) {
        scrollButton.addEventListener('click', function() {
            console.log('Scroll button clicked');
            document.body.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        function updateProgress() {
            var scrollTop = document.body.scrollTop;
            var scrollHeight = document.body.scrollHeight;
            var clientHeight = document.documentElement.clientHeight;

            console.log('document.body.scrollTop:', scrollTop);
            console.log('document.body.scrollHeight:', scrollHeight);
            console.log('clientHeight:', clientHeight);

            var progress = pathLength - (scrollTop * pathLength / (scrollHeight - clientHeight));
            progressPath.style.strokeDashoffset = progress;

            if (scrollTop > 300) {
                console.log('Showing scroll button');
                scrollButton.style.display = 'block';
                console.log('Button display style:', scrollButton.style.display); // Добавлено для отладки
            } else {
                console.log('Hiding scroll button');
                scrollButton.style.display = 'none';
                console.log('Button display style:', scrollButton.style.display); // Добавлено для отладки
            }
        }

        document.body.addEventListener('scroll', updateProgress);
        window.addEventListener('resize', updateProgress);

        // Вызываем функцию при загрузке страницы
        updateProgress();

        // Периодически проверяем прокрутку
        setInterval(updateProgress, 1000);
    } else {
        console.error('Scroll button not found');
    }
});
</script>