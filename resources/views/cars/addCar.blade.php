<h1>Add Car</h1>
 

<!-- <a href="/cars">Back</a><br> -->
<!-- <form action="/books" method="POST" enctype="multipart/form-data">
{{--<a href="/cars">Back</a>--}}
    @csrf
    <input type="text" name="title" placeholder="book title ..."/>
    <input type="text" name="author" placeholder="name of author ..."/>
    <input type="text" name="genre" placeholder="book genre ..."/>
    <input type="text" name="availability" placeholder="currently available in library ..."/>
    <input type="text" name="available_language" placeholder="available language ..." />
    <input type="number" name="publication_year" placeholder="publication year ..."/>
    <input type="file" name="image"  />
    <button type="submit">Submit</button>
</form>

@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
@endif -->
