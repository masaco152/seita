@extends('layouts.app')

@section('content')
    <!-- タスクフォームの作成… -->

    <!-- 現在のタスク -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                現在のタスク
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- テーブルボディー -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- タスク名 -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                  < form action="/task/{{ $task->id }}" method="POST">
           				 {{ csrf_field() }}
           				 {{ method_field('DELETE') }}

           				 <button>タスク削除</button>
       				 </form>
				</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
