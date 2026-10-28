@php($isEdit = $isEdit ?? false)
<div>
    <label for="title" class="mb-2 block text-sm font-medium text-stone-800">Service name <span class="text-red-600">*</span></label>
    <input id="title" name="title" type="text" value="{{ old('title', $credential->title ?? '') }}" required maxlength="255" class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-100">
</div>
<div>
    <label for="website_url" class="mb-2 block text-sm font-medium text-stone-800">Website URL</label>
    <input id="website_url" name="website_url" type="url" value="{{ old('website_url', $credential->website_url ?? '') }}" maxlength="2048" placeholder="https://example.com" class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-100">
</div>
<div>
    <label for="username" class="mb-2 block text-sm font-medium text-stone-800">Username or email</label>
    <input id="username" name="username" type="text" value="{{ old('username', $credential->username ?? '') }}" maxlength="255" class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-100">
</div>
<div>
    <label for="password" class="mb-2 block text-sm font-medium text-stone-800">Password @if (! $isEdit)<span class="text-red-600">*</span>@endif</label>
    <input id="password" name="password" type="password" @required(! $isEdit) maxlength="10000" autocomplete="{{ $isEdit ? 'new-password' : 'current-password' }}" data-password-strength-input data-password-strength-target="credential-password-strength" class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-100">
    <p id="credential-password-strength" data-password-strength role="status" aria-live="polite" class="mt-2 min-h-5 text-xs text-stone-500">Password strength: —</p>
    <p class="mt-2 text-xs text-stone-500">Need a stronger password? <a href="{{ route('password.generator') }}" class="font-medium text-violet-700 hover:text-violet-800">Use the Password Generator</a>.</p>
    @if ($isEdit)
        <p class="mt-2 text-xs text-stone-500">Leave blank to keep the current password.</p>
    @endif
</div>
<div>
    <label for="notes" class="mb-2 block text-sm font-medium text-stone-800">Notes</label>
    <textarea id="notes" name="notes" rows="5" maxlength="10000" class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm outline-none focus:border-violet-500 focus:ring-2 focus:ring-violet-100">{{ old('notes', $notes ?? '') }}</textarea>
</div>
