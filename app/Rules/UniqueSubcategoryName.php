<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class UniqueSubcategoryName implements Rule
{
    protected $category;
            
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;        
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {      
        $category       = Category::findorfail($this->category);
        $subcategory    = $category->subcategories()->where('name', $value)->first();
        return !$subcategory;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The subcategory name already exists in this category.';
    }
}
