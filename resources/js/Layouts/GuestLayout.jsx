import logo from '../../images/logo.png';
import { Link } from '@inertiajs/react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-amber-100">
            <div>
                <Link href="/">
                    <img src={logo} className='rounded-lg'></img>
                </Link>
            </div>

            <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-amber-100 overflow-hidden sm:rounded-lg">
                {children}
            </div>
        </div>
    );
}
