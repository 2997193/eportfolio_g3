@props(["numero" => null])
<div class="flex w-full max-w-[100px] flex-col gap-2 p-8 rounded-xl border border-gray-200 items-center bg-white box-content">
    <i class="bi bi-{{ $numero ?? '1' }}-circle-fill text-4xl"></i>
    <span class="text-center font-bold">
        Our best<br>
        Places
    </span>
</div>