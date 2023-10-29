import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { InertiaLink  } from '@inertiajs/inertia-react';


export default function Index({ auth, concerts}) {


    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Available Concerts</h2>}
        >
            <Head title="Concert" />

            {concerts.map(concert => (
                <div key={concert.id} className="block pt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <InertiaLink href={route('concert.detail', {csid: concert.id})} >
                        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div className="p-6 text-gray-900 dark:text-gray-100">{concert.name}</div>
                        </div>
                    </InertiaLink>
                </div>
            ))}

            
        </AuthenticatedLayout>
    );
}
