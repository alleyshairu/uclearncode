<div class="card">
    <form action="{{ route('student.preference.languages') }}" method="post">
        @csrf
        <div class="card-header">
            <h3 class="font-semibold leading-none tracking-tight">Language</h3>
            <p class="text-sm text-muted-foreground">Choose the programming languages whose skills you want to improve.</p>
        </div>

        <div class="card-body">
            @foreach ($languages as $language)
                <div>
                    <label for="language-{{ $language->id() }}"
                        class="flex cursor-pointer justify-between gap-4 rounded-lg border border bg-white p-4 text-sm font-medium shadow-sm hover:border-blue-500 has-[:checked]:border-blue-500 has-[:checked]:ring-1 has-[:checked]:ring-blue-500">
                        <div>
                            <p class="text-primary-forground">{{ $language->name() }}</p>
                            <p class="mt-1 text-muted-foreground">{{ $language->chapters->count() }} Chapters</p>
                        </div>

                        <input id="language-{{ $language->id() }}" type="checkbox" name="language_id[]" value="{{ $language->id() }}"
                            class="size-4 border-gray-300 text-blue-500"
                            {{ $preferences->languages->contains($language->id()) ? 'checked' : '' }} />
                    </label>
                </div>
            @endforeach
        </div>

        <div class="card-footer">
            <button type="submit" class="btn-primary">Save</button>
        </div>
    </form>
</div>
