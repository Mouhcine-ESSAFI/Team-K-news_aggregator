<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;

class preferenceController extends Controller
{
        public function addPreference(Request $request)
        {
            $request->validate([
                'selected_tags' => 'required|array',
            ]);

            $idUser = '1';

            foreach ($request->selected_tags as $categoryId) {
                Preference::create([
                    'category_id' => $categoryId,
                    'user_id' => $idUser,
                ]);
            }

            return redirect()->route('preferences.show');
        }


}
