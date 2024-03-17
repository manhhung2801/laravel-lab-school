<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th scope="col">Tên</th>
                <th scope="col">Điểm Toán</th>
                <th scope="col">Điểm Văn</th>
                <th scope="col">Điểm Trung Bình</th>
                <th scope="col">Xếp Loại</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sinhvien as $i)
                <tr>
                    <th>{{$i['ten']}}</th>
                    <td>{{$i['diem_toan']}}</td>
                    <td>{{$i['diem_van']}}</td>
                    <td>
                        {{$i['diem_trung_binh'] = ($i['diem_toan'] + $i['diem_van']) / 2 }}
                    </td>

                    <td>

                            @if ($i['diem_trung_binh'] >= 8 && $i['diem_trung_binh'] < 10)
                                {{$i['xep_loai'] = "Giỏi"}}
                            @elseif ($i['diem_trung_binh'] >= 7  && $i['diem_trung_binh'] <8)
                                {{$i['xep_loai'] = "Khá"}}
                            @else
                                {{$i['xep_loai'] = "Trung bình"}}
                            @endif

                    </td>

                  </tr>
                @endforeach

            </tbody>
          </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
