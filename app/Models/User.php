<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use App\Models\Company;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getCompanyLogo(): string
    {
        return Company::where('id', $this->company_id)->value('logo') ?: null;
    }

    public function getCompanyName(): string
    {
        return Company::where('id', $this->company_id)->value('name') ?: null;
    }

    public function getDisplayName(): string
    {
        return isset($this->name) && !empty(trim($this->name))  ? explode(' ', $this->name)[0] . ' ' . ((count(explode(' ', $this->name)) > 1) ? explode(' ', $this->name)[1][0] . '.' : '') : 'User';
    }

    public function getFirstname(): string
    {
        return isset($this->name) && !empty(trim($this->name))  ? explode(' ', $this->name)[0] : 'User';
    }

    public function getLastname(): string
    {
        return isset($this->name) && !empty(trim($this->name))  ? ((count(explode(' ', $this->name)) > 1) ? explode(' ', $this->name)[1] : '') : '';
    }

    public function getFullname(): string
    {
        return isset($this->name) && !empty(trim($this->name))  ? $this->name : 'User';
    }
}
