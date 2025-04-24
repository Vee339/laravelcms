@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $skill->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="category">Category:</label>
            <input type="category" name="category" id="category" value="{{old('category', $skill->category)}}">

            @if ($errors->first('category'))
                <br>
                <span class="w3-text-red">{{$errors->first('category')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="proficiency">Proficiency:</label>
            <input type="text" name="proficiency" id="proficiency" value="{{old('proficiency', $skill->proficiency)}}" required>

            @if ($errors->first('proficiency'))
                <br>
                <span class="w3-text-red">{{$errors->first('proficiency')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{old('description', $skill->description)}}</textarea>

            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Save Changes</button>

    </form>

    <a href="/console/skills/list">Back to Skills List</a>

</section>

@endsection