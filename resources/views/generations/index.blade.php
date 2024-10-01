
<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('generations.store') }}">
        @csrf
        <input type="text" name="generation_name" placeholder="Enter generation name...">
        <button type="submit">submit</button>
    </form>
</div>
