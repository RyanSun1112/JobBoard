<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="90000"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="OTtawawawa"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.chess.com/events/2024-botez-chess-camp-classical/results"></x-forms.input>
        <x-forms.checkbox label="Feature (cost Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>
            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laracast, video, education"></x-forms.input>
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>