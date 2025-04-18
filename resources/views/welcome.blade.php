@include('head')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<body>
    <a href="/ControllerTask1">Task 1</a>
    <a href="/ControllerTask2">Task 2</a>
    <a href="/ControllerTask3">Task 3</a>
</body>

</html>