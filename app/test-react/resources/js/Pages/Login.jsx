import { Head, useForm, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';

export default function Index({apiResult, test}) {
    const [errorLogin, setErrorLogin] = useState()
        // const { apiResult, test } = usePage().props;
        
        useEffect(() => {
            if (apiResult) {
                console.log(apiResult)
                if (apiResult.success) {
                    window.location.href = '/'
                } else {
                    setErrorLogin(apiResult.message)
                }
            }
        }, [apiResult])
        const { data, setData, post, processing, errors, reset } = useForm({
            email: '',
            password: '',
            remember: false,
        });
    
        const submit = (e) => {
            e.preventDefault();
            post(route('login'), {
                onFinish: (res) => {
                    console.log(res)
                },
                onError: (err) => console.log(err)
            });
        };
    return (
        <>
            <Head title="Login" />
            <div>
                <h1 className='font-bold text-lg'>Login</h1>

                <form onSubmit={submit}>
                    <p className='capitalize text-red-600'>{errorLogin}</p>
                    <div className='flex flex-col'>
                        <label>Email</label>
                        <input
                            type='email'
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                        />
                    </div>
                    <div className='flex flex-col'>
                        <label>Password</label>
                        <input
                            type='password'
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                        />
                    </div>
                    <button className='bg-blue-500 text-white p-5 rounded' disabled={processing}>Submit</button>
                </form>
            </div>
        </>
    );
}
