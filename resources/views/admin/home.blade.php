@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">Зображення</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Ціна</th>
                            <th scope="col">Слуг</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </thead>
                            @foreach($homes as $home)
                                <tr>
                                    <th scope="row">{{$home->id}}</th>
                                    <td>{{$home->image}}</td>
                                    <td>{{$home->name}}</td>
                                    <td>{{$home->price}}</td>
                                    <td>{{$home->slug}}</td>
                                    <td>{{$home->action}}</td>
                                    <td>{{$home->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_home', ['id' => $home->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_home', ['id' => $home->id]) }}">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








