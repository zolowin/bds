<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            min-height: 50px;
            background-color: burlywood;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <header>

    </header>
    <div class="container">
        <section>
            @foreach($tinhs as $tinh)
                <li><strong>Tên Tỉnh : </strong> {{ $tinh->ten_tinh }}</li>
                <li><strong>Mã Tỉnh :</strong> {{ $tinh->ma_tinh }}</li>
                <li><strong>Quận/Huyện :</strong>
                    @foreach($tinh->quans as $quan)
                        {{ $quan->ten_quan }}
                        @endforeach
                </li>
            @endforeach
        </section>
    </div>
</body>
</html>
