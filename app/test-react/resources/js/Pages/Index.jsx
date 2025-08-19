import { Head, Link } from '@inertiajs/react';

export default function Index({ posts, isLogin }) {
    return (
        <>
            <Head title="Home" />
            <div>
                <h1 className='font-bold text-lg'>Posts</h1>
                <h1 className='font-bold text-lg'>Hi, {isLogin ? 'User' : 'Guest'}</h1>
                <ul className='grid grid-cols-2 gap-10'>
                    {posts.map(post => {
                        return (
                          <li
                            key={post.id}
                            className='shadow p-4 rounded'
                          >
                              <p className='capitalize text-md font-bold '>{post.title}</p>
                              <p>{post.body}</p>
                          </li>
                        )
                    })}
                </ul>
            </div>
        </>
    );
}
