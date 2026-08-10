@extends('layout')

@section('title')
    บทความทั้งหมด
@endsection

@section('content')
    <h2 class="text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['statuus'] == true)
                            <spam class="btn btn-outline-success">เผยแพร่</spam>
                        @else
                            <spam class="btn btn-outline-secondary">ไม่เผยแพร่</spam>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
