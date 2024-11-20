import React from 'react';
import ReactDOM from 'react-dom';

const testimonials = [
    { name: 'John Doe', message: 'Max fixed my leaky faucet in no time!' },
    { name: 'Jane Smith', message: 'Highly recommend Max for all your repair needs.' }
];

const Testimonial = ({ name, message }) => (
    <div>
        <h3>{name}</h3>
        <p>{message}</p>
    </div>
);

const TestimonialList = () => (
    <div>
        {testimonials.map((t, index) => (
            <Testimonial key={index} {...t} />
        ))}
    </div>
);

ReactDOM.render(<TestimonialList />, document.getElementById('testimonials'));
