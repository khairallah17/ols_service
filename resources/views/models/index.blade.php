
<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('models.store') }}">
        @csrf
        <input type="text" name="model_name" placeholder="Enter model name...">
        <button type="submit">submit</button>
    </form>
</div>
