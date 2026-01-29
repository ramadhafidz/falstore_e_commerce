<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateBrandRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $brandId = $this->route('id');

        return [
            'name' => 'required|min:2|max:255',
            'slug' => 'required|max:255|unique:brands,slug,' . $brandId,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama brand harus diisi.',
            'name.min' => 'Nama brand minimal 2 karakter.',
            'name.max' => 'Nama brand maksimal 255 karakter.',
            'slug.required' => 'Slug brand harus diisi.',
            'slug.unique' => 'Slug brand sudah digunakan.',
            'slug.max' => 'Slug brand maksimal 255 karakter.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus PNG, JPG, JPEG, atau WEBP.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->slug) {
            $this->merge([
                'slug' => Str::slug($this->slug),
            ]);
        }
    }
}
