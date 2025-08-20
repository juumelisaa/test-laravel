<form wire:submit.prevent="submit" class="flex flex-col gap-5">
    <input type="email" wire:model="email" placeholder="Email" class="border p-2 rounded">
    <input type="password" wire:model="password" placeholder="Password" class="border p-2 rounded">
    <button type="submit" class='w-40 bg-[#dd292f] text-white px-5 py-2 rounded'>Send</button>

    @if (session()->has('error'))
        <div class="text-red-500">{{ session('error') }}</div>
    @endif
</form>
