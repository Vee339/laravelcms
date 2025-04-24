@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Skill Name</th>
            <th>Category</th>
            <th>Proficiency</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>
                <td>{{$skill->name}}</td>
                <td>{{$skill->category}}</td>
                <td>{{$skill->proficiency}}</td>
                <td>{{$skill->description}}</td>
                <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">Add new</a>

</section>

@endsection
