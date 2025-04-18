@include('head')
@if(session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif
<div>
    <form action="/ControllerTask1" method="post">
        @csrf
        <Label>Имя:</Label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"></br>
        <Label>Электронная почта:</Label>
        <input type="text" name="mail" value="{{ old('mail') }}"></br>
        <Label>Оценка страницы:</Label>
        <input type="range" name="char" id="char" min="0" max="5" value="5"></br>
        <Label>Комментарий:</Label></br>
        <textarea type="text" name="comment" id="comment"></textarea>
        </br>
        <button type="submit">Отправить</button>
    </form>
</div>

</html>