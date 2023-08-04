import React from 'react';
import FormEditor from './FormEditor';
import { createRoot } from 'react-dom/client';

const rootElement = document.getElementById('custom-forms-react-root');
const root = createRoot(rootElement);
root.render(<FormEditor />)