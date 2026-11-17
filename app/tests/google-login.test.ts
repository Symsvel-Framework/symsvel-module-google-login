import { describe, expect, it } from 'vitest';
import { moduleId } from '../src/lib/modules/google-login';

describe('google-login module', () => {
  it('exports its identifier', () => {
    expect(moduleId).toBe('google-login');
  });
});
