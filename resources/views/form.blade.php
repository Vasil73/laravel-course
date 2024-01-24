
    <form action="/submit_form" method="post">
    @csrf
    <div class="form-group">
        <label for="book_title">Название книги:</label>
        <input type="text" class="form-control" id="book_title" name="book_title">
    </div>
    <div class="form-group">
        <label for="author_name">Имя автора:</label>
        <input type="text" class="form-control" id="author_name" name="author_name">
    </div>
    <div class="form-group">
        <label for="genre">Жанр:</label>
        <select class="form-control" id="genre" name="genre">
            <option value="Фантастика">Фантастика</option>
            <option value="Детектив">Детектив</option>
            <option value="Роман">Роман</option>
            <option value="Поэзия">Поэзия</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Добавить книгу</button>
    </form>
