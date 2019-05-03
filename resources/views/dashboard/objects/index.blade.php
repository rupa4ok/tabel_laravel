@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    
                    <div class="card-body">
                        
                        
                        
                        
                        <table class="table results1" style="margin-top: 30px;">
                            <thead>
                            <tr>
                                <th>Название объекта</th>
                                <th>Месяц</th>
                                <th>Год</th>
                                <th>Прораб</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td><a href="#" class="people-editable" data-name="name" data-type="text"
                                       data-title="Имя" data-pk="{{ $item->id }}" data-url="components/ajax1.php">{{ $item->name }}</a></td>
                                <td><a href="#" class="people-mounth-editable" data-name="mounth" data-type="select"
                                       data-pk="{{ $item->id }}" data-url="components/ajax1.php">{{ $item->mounth }}</a></td>
                                <td><a href="#" class="people-year-editable" data-name="year" data-type="select"
                                       data-pk="{{ $item->id }}" data-url="components/ajax1.php">{{ $item->year }}</a></td>
                                <td>123</td>
                                <td><a href="#" class=" " data-name="status" data-type="select"
                                       data-pk="{{ $item->id }}" data-url="components/ajax1.php">{{ $item->status }}</a></td>
                                <td>
                                    <form method="post">
                                        <input type="text" value="{{ $item->id }}" name="id" hidden>
                                        <input type="text" name="delete" value="delete" hidden>
                                        <button type="submit" onclick="return proverka();"><i
                                            class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post">
                                        <input type="text" value="{{ $item->id }}" name="id" hidden>
                                        <input type="text" name="copy" value="copy" hidden>
                                        <button type="submit" onclick="return proverka1();"><i class="fas fa-copy"></i>
                                        </button>
                                    </form>
                                </td>
                                <td><a href="{{ route('admin.work.show', $item, $item->id) }}">
                                        <button><i class="fas fa-long-arrow-alt-right"></i></button>
                                    </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                        
                        {{ $items->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
