<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'company',
        'whatsapp_code',
        'whatsapp_number',
        'message',
        'ip_address',
        'user_agent',
        'is_read',
        'read_at',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'read_at' => 'datetime',
    ];

    // Accessor for full WhatsApp number
    public function getFullWhatsappAttribute()
    {
        if ($this->whatsapp_code) {
            return "+{$this->whatsapp_code} {$this->whatsapp_number}";
        }

        return $this->whatsapp_number;
    }

    // Mark as read
    public function markAsRead(): void
    {
        $this->update([
            'is_read' => true,
            'read_at' => now(),
        ]);
    }

    // Scope for unread messages
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }
}
