<?php

namespace App\Actions\Fortify;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'surname' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:punedhenes,punekerkues'],
            'age' => ['required', 'integer', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer', 'max:255'],
            'profession' =>['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'integer', 'max:255'],
            'projects' => ['required', 'integer', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'surname' => $input['surname'],
                'role' => $input['role'],
                'age' => $input['age'],
                'address' => $input['address'],
                'location' => $input['location'],
                'number' => $input['number'],
                'profession' => $input['profession'],
                'bio' => $input['bio'],
                'grade' => $input['grade'],
                'experience' => $input['experience'],
                'projects' => $input['projects'],
            ])->save();
        }
    }
    
    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'surname' => $input['surname'],
            'role' => $input['role'],
            'age' => $input['age'],
            'address' => $input['address'],
            'location' => $input['location'],
            'number' => $input['number'],
            'profession' => $input['profession'],
            'bio' => $input['bio'],
            'grade' => $input['grade'],
            'experience' => $input['experience'],
            'projects' => $input['projects'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }

// start adding data to your first model:
}
