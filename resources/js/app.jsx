import React from 'react';
import ReactDOM from 'react-dom/client';
import HelloReact from './components/HelloReact';

const rootElement = document.getElementById('react-root');

if (rootElement) {
    // Reuse existing root if it was already created
    if (!rootElement._reactRootContainer) {
        const root = ReactDOM.createRoot(rootElement);
        root.render(<HelloReact />);
    } else {
        rootElement._reactRootContainer.render(<HelloReact />);
    }
}
