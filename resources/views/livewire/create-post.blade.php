<div class="container mx-auto py-10">
  @if ($success)
    <span class="mb-4 block text-green-500">Post Saved Successfully.</span>
  @endif
  <form wire:submit='save' method="POST">
    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" id="title" wire:model='form.title'
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" />
      @error('title')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
      @enderror
    </div>
    <div class="mt-4">
      <label for="body">Body</label>
      <textarea id="body" wire:model='form.body' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
      @error('body')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
      @enderror
    </div>
    <button
      class="font-semi-bold mt-4 rounded-md bg-gray-800 px-4 py-2 text-xs uppercase tracking-widest text-white hover:bg-gray-700">Save</button>
  </form>
</div>
