<x-layout>
    <x-page-heading>Publier une offre d'emploi</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Titre du poste" placeholder="Développeur web" />
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <x-forms.input name="location" label="Adresse" />
            <x-forms.input name="url" label="Url" />
        </div>

        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <x-forms.input name="salary" label="Salaire" type="number" placeholder="90 000€" />
            <x-forms.select name="schedule" label="schedule">
                <option value="Part time" class="text-gray-600">Part Time</option>
                <option value="Full time" class="text-gray-600">Full Time</option>
            </x-forms.select>
        </div>


        <x-forms.checkbox name="featured" label="Mettre en avant" />
        <x-forms.divider />
        <x-forms.input name="tags" label="Tags"
            placeholder="separés pardes virgules , Ex: developer, designer..." />
        <x-forms.button class="bg-blue-800">Publier l'offre</x-forms.button>
    </x-forms.form>
</x-layout>
