@extends('layout.admin')

@section('content')
<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Monday</th>
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Tuesday</th>
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Wednesday</th>
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Thursday</th>
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Friday</th>
                <th class="border-top-0">Time</th>
                <th class="border-top-0">Saturday</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>
                    {{$start_time['0']}} <br>
                    {{$end_time['0']}}
                </td>
                <td>
                    {{$course_name['0']}} <br>
                    {{$teacher_name['0']}}
                </td>
                <td>
                    {{$start_time['3']}} <br>
                    {{$end_time['3']}}
                </td>
                <td>
                    {{$course_name['3']}} <br>
                    {{$teacher_name['3']}}
                </td>
                <td>
                    {{$start_time['6']}} <br>
                    {{$end_time['6']}}
                </td>
                <td>
                    {{$course_name['6']}} <br>
                    {{$teacher_name['6']}}
                </td>
                <td>
                    {{$start_time['9']}} <br>
                    {{$end_time['9']}}
                </td>
                <td>
                    {{$course_name['9']}} <br>
                    {{$teacher_name['9']}}
                </td>
                <td>
                    {{$start_time['12']}} <br>
                    {{$end_time['12']}}
                </td>
                <td>
                    {{$course_name['12']}} <br>
                    {{$teacher_name['12']}}
                </td>
                <td>
                    {{$start_time['15']}} <br>
                    {{$end_time['15']}}
                </td>
                <td>
                    {{$course_name['15']}} <br>
                    {{$teacher_name['15']}}
                </td>
            </tr>
            <tr>
                <td>
                    {{$start_time['1']}} <br>
                    {{$end_time['1']}}
                </td>
                <td>
                    {{$course_name['1']}} <br>
                    {{$teacher_name['1']}}
                </td>
                <td>
                    {{$start_time['4']}} <br>
                    {{$end_time['4']}}
                </td>
                <td>
                    {{$course_name['4']}} <br>
                    {{$teacher_name['4']}}
                </td>
                <td>
                    {{$start_time['7']}} <br>
                    {{$end_time['7']}}
                </td>
                <td>
                    {{$course_name['7']}} <br>
                    {{$teacher_name['7']}}
                </td>
                <td>
                    {{$start_time['10']}} <br>
                    {{$end_time['10']}}
                </td>
                <td>
                    {{$course_name['10']}} <br>
                    {{$teacher_name['10']}}
                </td>
                <td>
                    {{$start_time['13']}} <br>
                    {{$end_time['13']}}
                </td>
                <td>
                    {{$course_name['13']}} <br>
                    {{$teacher_name['13']}}
                </td>
                <td>
                    {{$start_time['16']}} <br>
                    {{$end_time['16']}}
                </td>
                <td>
                    {{$course_name['16']}} <br>
                    {{$teacher_name['16']}}
                </td>
            </tr>
            <tr>
                <td>
                    {{$start_time['2']}} <br>
                    {{$end_time['2']}}
                </td>
                <td>
                    {{$course_name['2']}} <br>
                    {{$teacher_name['2']}}
                </td>
                <td>
                    {{$start_time['5']}} <br>
                    {{$end_time['5']}}
                </td>
                <td>
                    {{$course_name['5']}} <br>
                    {{$teacher_name['5']}}
                </td>
                <td>
                    {{$start_time['8']}} <br>
                    {{$end_time['8']}}
                </td>
                <td>
                    {{$course_name['8']}} <br>
                    {{$teacher_name['8']}}
                </td>
                <td>
                    {{$start_time['11']}} <br>
                    {{$end_time['11']}}
                </td>
                <td>
                    {{$course_name['11']}} <br>
                    {{$teacher_name['11']}}
                </td>
                <td>
                    {{$start_time['14']}} <br>
                    {{$end_time['14']}}
                </td>
                <td>
                    {{$course_name['14']}} <br>
                    {{$teacher_name['14']}}
                </td>
                <td>
                    {{$start_time['17']}} <br>
                    {{$end_time['17']}}
                </td>
                <td>
                    {{$course_name['17']}} <br>
                    {{$teacher_name['17']}}
                </td>
            </tr>


        </tbody>
    </table>
</div>
@endsection