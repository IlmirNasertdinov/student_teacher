!<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Учителя и ученики</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
    <div class="container">
        
    

        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#new" role="tab" aria-controls="home" aria-selected="true">Форма добавления</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="student-tab" data-toggle="tab" href="#students" role="tab" aria-controls="profile" aria-selected="false">Ученики</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teachers" role="tab" aria-controls="contact" aria-selected="false">Учителя</a>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="home-tab">
                <form>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2 col-form-label">Статус</label>
                        <div class="col-sm-3">
                            <select id="inputState" class="form-control">
                                <option value="1" selected>Ученик</option>
                                <option value="2">Учитель</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surname" class="col-sm-2 col-form-label">Фамилия</label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="surname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="patronymic" class="col-sm-2 col-form-label">Отчество</label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="patronymic">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" id="addperson" class="btn btn-success">Добавить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="student-tab">
                <nav>
                    <ul id="student_list"></ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="teacher-tab">
                <nav>
                    <ul id="teacher_list"></ul>
                </nav>
            </div>
        </div>

    </div>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>