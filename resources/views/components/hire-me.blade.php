<a
    href="{{ route('home') }}"
    {{ $attributes->merge(['class' => 'bg-gradient-to-r from-indigo-300 to-indigo-400 font-normal px-4 py-3 rounded shadow-md text-white tracking-widest text-xs uppercase']) }}
    @click="window.fathom?.trackGoal('SJKONFQC', 0)"
>
    Hire me!
</a>
