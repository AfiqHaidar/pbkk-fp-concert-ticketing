'use client';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React from 'react';


export default function Detail({ auth, concert, concertDetails, guestDetails }) {
  
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{concert.name}</h2>}
        >
            <Head title={concert.name} />

            {concertDetails.map(detail => (
                <div key={detail.id} className="block pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                        <div className="p-6 text-gray-900 dark:text-gray-100">{detail.date}</div>
                        <a href={route('concert.form', {csid: concert.id, dtid: detail.id})} class="rounded-full mr-3 bg-gray-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-gray-900">    
                            Buy Ticket
                        </a>
                    </div>
                </div>
            ))}

            {guestDetails.map(guest => (
                <div key={guest.id} className="block pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">{guest.guest_name}</div>
                    </div>
                </div>
            ))}

            <div className='max-w-7xl mx-auto sm:px-6 lg:px-8'>
                
            </div>
        </AuthenticatedLayout>
    );
}
