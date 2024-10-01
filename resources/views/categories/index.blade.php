
<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <input type="text" name="category_name" placeholder="Enter Category name...">
        <button type="submit">submit</button>
    </form>
</div>
