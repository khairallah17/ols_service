
<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('brands.store') }}">
        @csrf
        <input type="text" name="brand_name" placeholder="Enter brand name...">
        <button type="submit">submit</button>
    </form>
</div>
