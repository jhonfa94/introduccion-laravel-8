<div class="grid grid-cols-3 gap-4 mt-8">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled.
    --}}
    @foreach ($courses as $course )
        <x-course-card :course="$course"/>
    @endforeach
    
</div>
