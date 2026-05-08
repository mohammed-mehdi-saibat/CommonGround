<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="mb-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 italic">Booking Ledger</h2>
                    <p class="text-slate-500 font-medium mt-1">Track stay history, payments, and reservation statuses.</p>
                </div>
            </div>

            <!-- Bookings List -->
            <x-card class="!p-0 border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Reference</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Guest</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Financials</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Status</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Date</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($bookings ?? [] as $booking)
                                <tr class="hover:bg-sky-50/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="font-black text-slate-800 text-lg">#{{ $booking->reference_number }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Booking ID</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sky-700 font-black text-lg">{{ $booking->user->name ?? 'N/A' }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">{{ $booking->user->email ?? 'No email' }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-emerald-600 font-black text-lg">${{ number_format($booking->total_amount, 2) }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Total Paid</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <x-badge class="{{ $booking->status == 'confirmed' ? 'bg-emerald-100 text-emerald-600 border-emerald-200' : ($booking->status == 'pending' ? 'bg-amber-100 text-amber-600 border-amber-200' : 'bg-red-100 text-red-600 border-red-200') }}">
                                            {{ ucfirst($booking->status) }}
                                        </x-badge>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-slate-600 font-bold">{{ $booking->booking_date ? $booking->booking_date->format('M d, Y') : 'N/A' }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Reservation Date</div>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('admin.bookings.show', $booking) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-sky-500 hover:border-sky-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>