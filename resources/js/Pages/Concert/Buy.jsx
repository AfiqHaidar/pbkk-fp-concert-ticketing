import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import axios from 'axios';
import { useState } from 'react';

export default function Buy({ auth, cat }) {


    const [ticketCount, setTicketCount] = useState(1);
    const [selectedCategory, setSelectedCategory] = useState(cat[0] || '');
    const [selectedPaymentMethod, setSelectedPaymentMethod] = useState('');

    const currentPath = window.location.pathname;
    const handleSubmit = (e) => {
        e.preventDefault();
    
        const formData = {
            ticketCount: ticketCount, 
            selectedCategory: selectedCategory,
            selectedPaymentMethod: selectedPaymentMethod,
        };

        console.log(currentPath);
    
        axios.post('/concert/buy', formData)
            .then((response) => {
            })
            .catch((error) => {
            });
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Buy</h2>}
        >
            <Head title="Buy" />

            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="ticketCount">Number of Tickets:</label>
                    <input
                        type="number"
                        id="ticketCount"
                        value={ticketCount}
                        onChange={(e) => setTicketCount(e.target.value)}
                    />
                </div>

                <div>
                    <label htmlFor="category">Category:</label>
                    <select
                        id="category"
                        value={selectedCategory}
                        onChange={(e) => setSelectedCategory(e.target.value)}
                    >
                        {cat.map((category) => (
                            <option key={category.id} value={category.id}>
                                {category.code}
                            </option>
                        ))}
                    </select>
                </div>

                <div>
                    <label htmlFor="paymentMethod">Payment Method:</label>
                    <select
                        id="paymentMethod"
                        value={selectedPaymentMethod}
                        onChange={(e) => setSelectedPaymentMethod(e.target.value)}
                    >
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>

                <button className='bg-white' type="submit">Submit</button>
            </form>
    
        </AuthenticatedLayout>
    );
}
